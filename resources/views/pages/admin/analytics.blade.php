<x-layout>

    <div class="row">
        <x-admin-sidebar />
        <div class="col-lg-9">
            <div class="d-flex">

                <div class="w-25">

                    {!! $chart->container() !!}
                </div>
                <div class="w-25">

                    {!! $chart2->container() !!}
                </div>
                <div class="w-25">

                    {!! $chart3->container() !!}
                </div>
            </div>

        </div>
    </div>
    {!! $chart->script() !!}
    {!! $chart2->script() !!}
    {!! $chart3->script() !!}

    </x-layput>
