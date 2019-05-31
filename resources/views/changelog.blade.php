@extends('layouts.default', ['meta' => $meta, 'welcome' => $welcome])

@section('content')

<div class="row content mt-3">
    <div class="col-12">
        <h2>Releases</h2>

        <p>The changelog for the Costs to Expect service, we try not to say
            <code>bug fixes and improvements</code>, we may on occasion not fully detail a
            change or fix if we don't feel it is necessary, however, we will always try to be as
            open as possible.</p>

        <p>The changelog for the Costs to Expect API can be found over on
            <a href="https://github.com/costs-to-expect/api/blob/master/CHANGELOG.md">GitHub</a>,
            the API changelog details every change, the API is Open Source.</p>

        <hr />

        <h2>The website is not showing live data, calling the API is in the works,
            planned for v1.04.0!</h2>

        <hr />

        <h3>[v1.04.0] - xth June 2019</h3>

        <h3>Changed</h3>

        <ul>
            <li>Altered the dashboard title.</li>
        </ul>

        <h3>Fixed</h3>

        <ul>
            <li>Content update to 'What we count?' page.</li>
        </ul>

        <h2>[v1.03.1] - 29th May 2019</h2>

        <h3>Fixed</h3>

        <ul>
            <li>Pagination controls should not show the prefix text on mobile.</li>
        </ul>

        <h2>[v1.03.0] - 29th May 2019</h2>

        <h3>Added</h3>

        <ul>
            <li>Summary block view component.</li>
            <li>Summary block container view component.</li>
            <li>Pagination view component.</li>
            <li>API requests page view component.</li>
        </ul>

        <h3>Changed</h3>

        <ul>
            <li>Opted not to add a border radius to inputs.</li>
            <li>Modified pagination layout for mobile, just show next and previous as well as page
                number, moved per page control onto the same line.</li>
            <li>The content pages now use a general layout file rather than defining everything in the view.</li>
            <li>Content updates for text before tables.</li>
        </ul>

        <h3>Fixed</h3>

        <ul>
            <li>Minor spelling error in the text above the last 25 expenses on the dashboard.</li>
            <li>Removed the 100% height on elements, causing minor scrolling issues on some mobile devices.</li>
        </ul>

        <h2>[v1.02.0] - 9th May 2019</h2>

        <h3>Added</h3>

        <ul>
            <li>The initial idea for years summary pages.</li>
            <li>What do we count? content page.</li>
            <li>Menu view components to generate the site menus.</li>
            <li>Content after headings to give a small overview of data.</li>
            <li>The initial idea for pagination.</li>
        </ul>

        <h3>Changed</h3>

        <ul>
            <li>The child detail pages now show an expenses summary for the last three years, not three months.</li>
            <li>The initial work on making the site dynamic, controllers, layout files etc.</li>
        </ul>

        <h3>Fixed</h3>

        <ul>
            <li>Typo, Niall's name incorrect on the detail page, shown as Jack.</li>
        </ul>

        <h2>[v1.01.0] - 27th April 2019</h2>

        <h3>Added</h3>

        <ul>
            <li>The initial design for the detail pages for <code>Jack</code> and <code>Niall</code>.</li>
            <li>A <code>disabled</code> menu item to explain what expenses are counted.</li>
        </ul>

        <h3>Changed</h3>

        <ul>
            <li>Minor tweak to the mobile layout, the corner background image was too large.</li>
            <li>Desktop menu items may support icons.</li>
            <li>Update to the welcome section on mobile, I was showing the logo twice.</li>
            <li><code>Blackborough Children</code> menu missing from About and Changelog views.</li>
            <li>API requests breaking out of the table.</li>
        </ul>

        <h2>[v1.00.1] - 23rd April 2019</h2>

        <h3>Changed</h3>

        <ul>
            <li>Minor content update, added <code>Niall</code>.</li>
        </ul>

        <h2>[v1.00.0] - 20th April 2019</h2>

        <h3>Added</h3>

        <ul>
            <li>Released the initial design, fully responsive, Mobile through to Desktop.</li>
            <li>Simple dashboard to show an overview of expenses [Sample data].</li>
            <li>About page, provides a little detail on the future service and website.</li>
            <li>Changelog, this page, detail every change to the website.</li>
        </ul>
    </div>
</div>

@endsection
