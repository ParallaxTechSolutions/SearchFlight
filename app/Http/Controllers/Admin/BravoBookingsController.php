<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BravoBooking\BulkDestroyBravoBooking;
use App\Http\Requests\Admin\BravoBooking\DestroyBravoBooking;
use App\Http\Requests\Admin\BravoBooking\IndexBravoBooking;
use App\Http\Requests\Admin\BravoBooking\StoreBravoBooking;
use App\Http\Requests\Admin\BravoBooking\UpdateBravoBooking;
use App\Models\BravoBooking;
use Brackets\AdminListing\Facades\AdminListing;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BravoBookingsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBravoBooking $request
     * @return array|Factory|View
     */
    public function index(IndexBravoBooking $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BravoBooking::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'code', 'vendor_id', 'customer_id', 'payment_id', 'gateway', 'object_id', 'object_model', 'start_date', 'end_date', 'total', 'total_guests', 'currency', 'status', 'deposit', 'deposit_type', 'commission', 'commission_type', 'email', 'first_name', 'last_name', 'phone', 'address', 'address2', 'city', 'state', 'zip_code', 'country', 'create_user', 'update_user'],

            // set columns to searchIn
            ['id', 'code', 'gateway', 'object_model', 'currency', 'status', 'deposit_type', 'commission_type', 'email', 'first_name', 'last_name', 'phone', 'address', 'address2', 'city', 'state', 'zip_code', 'country', 'customer_notes']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.bravo-booking.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.bravo-booking.create');

        return view('admin.bravo-booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBravoBooking $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBravoBooking $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BravoBooking
        $bravoBooking = BravoBooking::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/bravo-bookings'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/bravo-bookings');
    }

    /**
     * Display the specified resource.
     *
     * @param BravoBooking $bravoBooking
     * @throws AuthorizationException
     * @return void
     */
    public function show(BravoBooking $bravoBooking)
    {
        $this->authorize('admin.bravo-booking.show', $bravoBooking);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BravoBooking $bravoBooking
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BravoBooking $bravoBooking)
    {
        $this->authorize('admin.bravo-booking.edit', $bravoBooking);


        return view('admin.bravo-booking.edit', [
            'bravoBooking' => $bravoBooking,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBravoBooking $request
     * @param BravoBooking $bravoBooking
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBravoBooking $request, BravoBooking $bravoBooking)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BravoBooking
        $bravoBooking->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/bravo-bookings'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/bravo-bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBravoBooking $request
     * @param BravoBooking $bravoBooking
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBravoBooking $request, BravoBooking $bravoBooking)
    {
        $bravoBooking->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBravoBooking $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBravoBooking $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DB::table('bravoBookings')->whereIn('id', $bulkChunk)
                        ->update([
                            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
