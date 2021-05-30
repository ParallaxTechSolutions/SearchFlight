<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BravoBookingPayment\BulkDestroyBravoBookingPayment;
use App\Http\Requests\Admin\BravoBookingPayment\DestroyBravoBookingPayment;
use App\Http\Requests\Admin\BravoBookingPayment\IndexBravoBookingPayment;
use App\Http\Requests\Admin\BravoBookingPayment\StoreBravoBookingPayment;
use App\Http\Requests\Admin\BravoBookingPayment\UpdateBravoBookingPayment;
use App\Models\BravoBookingPayment;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BravoBookingPaymentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBravoBookingPayment $request
     * @return array|Factory|View
     */
    public function index(IndexBravoBookingPayment $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BravoBookingPayment::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'booking_id', 'payment_gateway', 'amount', 'currency', 'converted_amount', 'converted_currency', 'exchange_rate', 'status', 'create_user', 'update_user'],

            // set columns to searchIn
            ['id', 'payment_gateway', 'currency', 'converted_currency', 'status', 'logs']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.bravo-booking-payment.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.bravo-booking-payment.create');

        return view('admin.bravo-booking-payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBravoBookingPayment $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBravoBookingPayment $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BravoBookingPayment
        $bravoBookingPayment = BravoBookingPayment::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/bravo-booking-payments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/bravo-booking-payments');
    }

    /**
     * Display the specified resource.
     *
     * @param BravoBookingPayment $bravoBookingPayment
     * @throws AuthorizationException
     * @return void
     */
    public function show(BravoBookingPayment $bravoBookingPayment)
    {
        $this->authorize('admin.bravo-booking-payment.show', $bravoBookingPayment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BravoBookingPayment $bravoBookingPayment
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BravoBookingPayment $bravoBookingPayment)
    {
        $this->authorize('admin.bravo-booking-payment.edit', $bravoBookingPayment);


        return view('admin.bravo-booking-payment.edit', [
            'bravoBookingPayment' => $bravoBookingPayment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBravoBookingPayment $request
     * @param BravoBookingPayment $bravoBookingPayment
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBravoBookingPayment $request, BravoBookingPayment $bravoBookingPayment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BravoBookingPayment
        $bravoBookingPayment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/bravo-booking-payments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/bravo-booking-payments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBravoBookingPayment $request
     * @param BravoBookingPayment $bravoBookingPayment
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBravoBookingPayment $request, BravoBookingPayment $bravoBookingPayment)
    {
        $bravoBookingPayment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBravoBookingPayment $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBravoBookingPayment $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BravoBookingPayment::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
