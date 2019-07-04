@extends('layouts.default', ['meta' => $meta, 'welcome' => $welcome])

@section('content')

<div class="row mb-3">
    <div class="col-md-3 col-lg-4 col-sm-6 col-12">
        <img src="{{ asset($child_details['image_uri']) }}" class="img-fluid rounded mx-auto d-block" alt="icon">
    </div>
    <div class="col-md-9 col-lg-8 col-sm-6 col-12">
        <div class="detail-page-intro">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h5>Name</h5>
                    <p class="sub-heading text-muted d-none d-md-block">What did we call him?</p>
                    <p class="data">{{ $child_details['name'] }}</p>
                    <h5>Born</h5>
                    <p class="sub-heading text-muted d-none d-md-block">When did he emerge?</p>
                    <p class="data">{{ $child_details['dob'] }}</p>
                    <h5>Sex & Birth weight</h5>
                    <p class="sub-heading text-muted d-none d-md-block">What were his vital statistics?</p>
                    <p class="data">{{ $child_details['sex'] }} & {{ $child_details['weight'] }}</p>
                    <h5>Total expenses</h5>
                    <p class="sub-heading text-muted d-none d-md-block">How much to raise {{ $child_details['short_name'] }}?</p>
                    <p class="data">&pound;{{ number_format((float) $total, 2) }}</p>
                </div>
                <div class="col-md-6 col-12">
                    <h5>Number of expenses in {{ $active_month_name . ' '  . $active_year }}</h5>
                    <p class="sub-heading text-muted d-none d-md-block">How many purchases did we make in the month?</p>
                    <p class="data">{{ $number_of_expenses }}</p>
                    @if ($largest_essential_expense !== null)
                        <h5>Top Essential expense</h5>
                        <p class="sub-heading text-muted d-none d-md-block">The grandest expense?</p>
                        <p class="data">&pound;{{ number_format((float) $largest_essential_expense['actualised_total'], 2) }} <small>({{ $largest_essential_expense['description'] }})</small></p>
                    @endif
                    @if ($largest_non_essential_expense !== null)
                        <h5>Top Non-Essential expense</h5>
                        <p class="sub-heading text-muted d-none d-md-block">The grandest expense?</p>
                        <p class="data">&pound;{{ number_format((float) $largest_non_essential_expense['actualised_total'], 2) }} <small>({{ $largest_non_essential_expense['description'] }})</small></p>
                    @endif
                    @if ($largest_hobby_interest_expense !== null)
                        <h5>Top Hobby and Interests expense</h5>
                        <p class="sub-heading text-muted d-none d-md-block">The grandest expense?</p>
                        <p class="data">&pound;{{ number_format((float) $largest_hobby_interest_expense['actualised_total'], 2) }} <small>({{ $largest_hobby_interest_expense['description'] }})</small></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <hr />
    </div>
</div>
@if ($annual_summary !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>Total expenses by year</h4>

        <p>Total expenses grouped by year for each year of {{ $child_details['short_name'] }}'s life.</p>
    </div>
</div>
<div class="row">
    @foreach ($annual_summary as $year)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
        <div class="media summary-block shadow-sm h-100 @if($active_year == $year['year']) active @endif">
            <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
            <div class="media-body">
                <h4 class="mt-0"><a href="/jack/expenses/year/{{ $year['year'] }}">{{ $year['year'] }}</a></h4>
                <h6 class="mt-0">All the expenses for {{ $child_details['short_name'] }} in {{ $year['year'] }}</h6>
                <p class="total mb-0">&pound;{{ number_format((float) $year['total'], 2) }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-12">
        <hr />
    </div>
</div>
@endif

@if ($monthly_summary !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>Total expenses by month for {{ $active_year }}</h4>

        <p>Total expenses grouped by month for {{ $active_year }} of {{ $child_details['short_name'] }}'s life.</p>
    </div>
</div>
<div class="row">
    @foreach ($monthly_summary as $month)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 1rem;">
        <div class="media summary-block shadow-sm h-100 @if($active_month == $month['id']) active @endif">
            <img src="{{ asset('images/theme/expenses.png') }}" class="mr-2" width="48" height="48" alt="icon">
            <div class="media-body">
                <h4 class="mt-0"><a href="/jack/expenses/year/{{ $active_year }}/month/{{ $month['id'] }}">{{ $month['month'] }}</a></h4>
                <h6 class="mt-0">All the expenses for {{ $child_details['short_name'] }}
                    in {{ $month['month'] . ' ' . $active_year }}</h6>
                <p class="total mb-0">&pound;{{ number_format((float) $month['total'], 2) }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-12">
        <hr />
    </div>
</div>
@endif

@if ($recent_expenses !== null)
<div class="row mt-4">
    <div class="col-12">
        <h4>The 25 most recent expenses for {{ $child_details['short_name'] }} in
            {{ $active_month_name . ' ' . $active_year }} <small> - <a href="{{ $child_details['uri'] . '/expenses' }}">(View all)</a></small></h4>

        <p>The table below lists the last 25 expenses we have logged for {{ $child_details['short_name'] }} in {{ $active_year }},
            to see more select any summary count, year or month.</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="p-3 shadow-sm white-container">
            <table class="table table-borderless table-hover">
                <caption>25 most recent expenses</caption>
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="d-none d-md-table-cell">Category</th>
                        <th scope="col" class="d-none d-md-table-cell">Subcategory</th>
                        <th scope="col" class="d-none d-xl-table-cell">Total</th>
                        <th scope="col" class="d-none d-xl-table-cell">Allocation</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recent_expenses as $expense)
                    <tr class="top">
                        <td>{{ $expense['description'] }}</td>
                        <td><span class="d-none d-md-block">{{ date('j M Y', strtotime($expense['effective_date'])) }}</span><span class="d-table-cell d-sm-block d-md-none">{{ date('d/m/Y', strtotime($expense['effective_date'])) }}</span></td>
                        <td class="d-none d-md-table-cell"><span class="category"><a href="{{ $child_details['uri'] . '/expenses?category=' . $expense['category']['id'] }}">{{ $expense['category']['name'] }}</a></span></td>
                        <td class="d-none d-md-table-cell"><span class="category"><a href="{{ $child_details['uri'] . '/expenses?category=' . $expense['category']['id'] . '&subcategory=' . $expense['subcategory']['id'] }}">{{ $expense['subcategory']['name'] }}</a></span></td>
                        <td class="d-none d-xl-table-cell">£{{ $expense['total'] }}</td>
                        <td class="d-none d-xl-table-cell">{{ $expense['percentage'] }}%</td>
                        <td><strong>&pound;{{ $expense['actualised_total'] }}</strong></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@include(
    'page-component.api-requests',
    [
        'api_requests' => $api_requests
    ]
)

@endsection