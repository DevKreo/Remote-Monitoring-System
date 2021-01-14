<!--Grid row-->
<div class="row">

    <!--Grid column-->
    <div class="col-md-6 mb-4">

        <!--Card-->
        <div class="card">

            <!--Card content-->
            <div class="card-body card-body-cascade text-center">

                <!--Google map-->
                <div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 300px">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d76488.53527855201!2d44.9605813!3d53.1951325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41410062a40af0d1%3A0xbaed6ceca1cba901!2z0J_QtdC90LfQsCwg0J_QtdC90LfQtdC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sua!4v1608654685355!5m2!1sru!2sua"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0">
                    </iframe>
                </div>

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 mb-4">

        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card content-->
            <div class="card-body card-body-cascade">

                <!--Google map-->
                <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Серийный номер</th>
                                <th>Рубеж</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->d_name }}</td>
                                    <td>{{ $row->role_name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-dark btn-circle"><i
                                                    class="fa fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    {{-- <div class="d-flex justify-content-center">
                        {!! $users->links() !!}
                    </div> --}}
                </div>
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card-->
    </div>
    <!--Grid column-->
</div>
<!--Grid row-->
