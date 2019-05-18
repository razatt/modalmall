@extends("layouts.admin")

@section('title', 'Категории товаров')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Список категорий</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Reason</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category['id']}}</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a style="margin-right: 5px;" href="{{route('admin.categories.create')}}" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить
                    </a>
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {{ $categories->links() }}
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection