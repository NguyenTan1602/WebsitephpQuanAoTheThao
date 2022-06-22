@extends('admin_layout');
@section('admin_content');
   <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">THỐNG KÊ DANH MỤC SẢN PHẨM</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/')}}">Trang chủ Admin</a></li>
                            <li class="breadcrumb-item active">Thống kê nhân viên</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                               THỐNG KÊ DANH MỤC SẢN PHẨM                            
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Thống kê danh mục sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Mô tả sản phẩm</th>
                                                <th>Quản lý sản phẩm</th>

                                               
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                
                                               
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                
                                            </tr>
                                            
                                             @forech($view_category_product as $key => $cate_pro)
                                                <tr>
                                                     <td>{{$cate_pro->category_id}}</td>
                                                     <td>{{$cate_pro->category_name}}</td>
                                                     <td>{{$cate_pro->category_describe}}</td>
                                                     
                                                      <td>
                                                        <a href="{{URL::to('/SuaSP/'.$cate_pro->category_id)}}">Sửa</a>>
                                                        <a href="{{URL::to('/XoaSP/'.$cate_pro->category_id)}}">Xoá</a>>
                                                     </td>
 
                                            		
                                            
                                            	</tr>
                                            	
                                            
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection;