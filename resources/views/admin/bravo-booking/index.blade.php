@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.bravo-booking.actions.index'))

@section('body')

    <bravo-booking-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/bravo-bookings') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.bravo-booking.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/bravo-bookings/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.bravo-booking.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.bravo-booking.columns.id') }}</th>
                                        <th is='sortable' :column="'code'">{{ trans('admin.bravo-booking.columns.code') }}</th>
                                        <th is='sortable' :column="'vendor_id'">{{ trans('admin.bravo-booking.columns.vendor_id') }}</th>
                                        <th is='sortable' :column="'customer_id'">{{ trans('admin.bravo-booking.columns.customer_id') }}</th>
                                        <th is='sortable' :column="'payment_id'">{{ trans('admin.bravo-booking.columns.payment_id') }}</th>
                                        <th is='sortable' :column="'gateway'">{{ trans('admin.bravo-booking.columns.gateway') }}</th>
                                        <th is='sortable' :column="'object_id'">{{ trans('admin.bravo-booking.columns.object_id') }}</th>
                                        <th is='sortable' :column="'object_model'">{{ trans('admin.bravo-booking.columns.object_model') }}</th>
                                        <th is='sortable' :column="'start_date'">{{ trans('admin.bravo-booking.columns.start_date') }}</th>
                                        <th is='sortable' :column="'end_date'">{{ trans('admin.bravo-booking.columns.end_date') }}</th>
                                        <th is='sortable' :column="'total'">{{ trans('admin.bravo-booking.columns.total') }}</th>
                                        <th is='sortable' :column="'total_guests'">{{ trans('admin.bravo-booking.columns.total_guests') }}</th>
                                        <th is='sortable' :column="'currency'">{{ trans('admin.bravo-booking.columns.currency') }}</th>
                                        <th is='sortable' :column="'status'">{{ trans('admin.bravo-booking.columns.status') }}</th>
                                        <th is='sortable' :column="'deposit'">{{ trans('admin.bravo-booking.columns.deposit') }}</th>
                                        <th is='sortable' :column="'deposit_type'">{{ trans('admin.bravo-booking.columns.deposit_type') }}</th>
                                        <th is='sortable' :column="'commission'">{{ trans('admin.bravo-booking.columns.commission') }}</th>
                                        <th is='sortable' :column="'commission_type'">{{ trans('admin.bravo-booking.columns.commission_type') }}</th>
                                        <th is='sortable' :column="'email'">{{ trans('admin.bravo-booking.columns.email') }}</th>
                                        <th is='sortable' :column="'first_name'">{{ trans('admin.bravo-booking.columns.first_name') }}</th>
                                        <th is='sortable' :column="'last_name'">{{ trans('admin.bravo-booking.columns.last_name') }}</th>
                                        <th is='sortable' :column="'phone'">{{ trans('admin.bravo-booking.columns.phone') }}</th>
                                        <th is='sortable' :column="'address'">{{ trans('admin.bravo-booking.columns.address') }}</th>
                                        <th is='sortable' :column="'address2'">{{ trans('admin.bravo-booking.columns.address2') }}</th>
                                        <th is='sortable' :column="'city'">{{ trans('admin.bravo-booking.columns.city') }}</th>
                                        <th is='sortable' :column="'state'">{{ trans('admin.bravo-booking.columns.state') }}</th>
                                        <th is='sortable' :column="'zip_code'">{{ trans('admin.bravo-booking.columns.zip_code') }}</th>
                                        <th is='sortable' :column="'country'">{{ trans('admin.bravo-booking.columns.country') }}</th>
                                        <th is='sortable' :column="'create_user'">{{ trans('admin.bravo-booking.columns.create_user') }}</th>
                                        <th is='sortable' :column="'update_user'">{{ trans('admin.bravo-booking.columns.update_user') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="32">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/bravo-bookings')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/bravo-bookings/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.code }}</td>
                                        <td>@{{ item.vendor_id }}</td>
                                        <td>@{{ item.customer_id }}</td>
                                        <td>@{{ item.payment_id }}</td>
                                        <td>@{{ item.gateway }}</td>
                                        <td>@{{ item.object_id }}</td>
                                        <td>@{{ item.object_model }}</td>
                                        <td>@{{ item.start_date | datetime }}</td>
                                        <td>@{{ item.end_date | datetime }}</td>
                                        <td>@{{ item.total }}</td>
                                        <td>@{{ item.total_guests }}</td>
                                        <td>@{{ item.currency }}</td>
                                        <td>@{{ item.status }}</td>
                                        <td>@{{ item.deposit }}</td>
                                        <td>@{{ item.deposit_type }}</td>
                                        <td>@{{ item.commission }}</td>
                                        <td>@{{ item.commission_type }}</td>
                                        <td>@{{ item.email }}</td>
                                        <td>@{{ item.first_name }}</td>
                                        <td>@{{ item.last_name }}</td>
                                        <td>@{{ item.phone }}</td>
                                        <td>@{{ item.address }}</td>
                                        <td>@{{ item.address2 }}</td>
                                        <td>@{{ item.city }}</td>
                                        <td>@{{ item.state }}</td>
                                        <td>@{{ item.zip_code }}</td>
                                        <td>@{{ item.country }}</td>
                                        <td>@{{ item.create_user }}</td>
                                        <td>@{{ item.update_user }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/bravo-bookings/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.bravo-booking.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </bravo-booking-listing>

@endsection