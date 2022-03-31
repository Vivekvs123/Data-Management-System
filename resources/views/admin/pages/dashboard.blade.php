<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed mt-5">

    @include('admin.includes.nav')
    @include('admin.includes.sidebar')
    <div class="content-wrapper">
        <div class="container mt-5 ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-body text-center text-black">
                            <h1>Welcome to Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header"><i class="fa fa-user f-left"></i> Admin Users</div>
                    <div class="card-body">
                        <h5 class="card-title">Total count</h5><br><span>{{$adminu}}</span>

                    </div>
                </div>
                <br>
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header"><i class="fa fa-user f-left"></i> Sales Team</div>
                    <div class="card-body">
                        <h5 class="card-title">Total count</h5><br><span>{{$salesu}}</span>

                    </div>
                </div>
                <br>
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header"><i class="fa fa-user f-left"></i> Inactive Users</div>
                    <div class="card-body">
                        <h5 class="card-title">Total count</h5><br><span>{{$inactive}}</span>

                    </div>

                </div>


            </div>
        </div>

    </div>
    @include('admin.includes.foot')
</body>

</html>