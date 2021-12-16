@extends('template.app')

@section('custom-css-js')

@endsection

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <label class="" for="">O que tem de bom aqui ?</label>

            <div class="card">
                <div class="card-header">
                    <label for="">Featured</label>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary" data-toggle="tooltip" title="Teste">Go somewhere</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="far fa-comment fa-4x"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category">Number</p>
                                    <h3 class="card-title">150GB</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats" style="font-size: smaller">
                            <i class="tim-icons icon-refresh-01"></i> Update Now
                        </div>
                    </div>
                </div>
            </div>

            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                <div class="card card-plain">
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Collapsible Group Item #1

                            <i class="tim-icons icon-minimal-down"></i>
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card card-plain">
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2

                            <i class="tim-icons icon-minimal-down"></i>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card card-plain">
                    <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3

                            <i class="tim-icons icon-minimal-down"></i>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <div class="alert alert-secondary alert-dismissible fade show text-black-50" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <div class="alert alert-light alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>

            <button class="btn btn-dark">
                123
            </button>


            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#pablo">Action</a>
                                <a class="dropdown-item" href="#pablo">Another action</a>
                                <a class="dropdown-item" href="#pablo">Something else</a>
                            </div>
                        </div>
                    </div>
                    Table
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Job Position</th>
                                <th>Since</th>
                                <th class="text-right">Salary</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td class="text-right">&euro; 99,225</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                        <i class="tim-icons icon-single-02"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                        <i class="tim-icons icon-settings"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>John Doe</td>
                                <td>Design</td>
                                <td>2012</td>
                                <td class="text-right">&euro; 89,241</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon">
                                        <i class="tim-icons icon-single-02"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon">
                                        <i class="tim-icons icon-settings"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Alex Mike</td>
                                <td>Design</td>
                                <td>2010</td>
                                <td class="text-right">&euro; 92,144</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-single-02"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-settings"></i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- modal --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal modal-black fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body_end_js')

@endsection
