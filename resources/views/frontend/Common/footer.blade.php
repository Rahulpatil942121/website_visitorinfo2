     
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="{{asset('assets/js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{asset('assets/js/plugins/morris/morris.min.js')}}" type="text/javascript"></script> -->
        <!-- Sparkline -->
        <!-- <script src="{{asset('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script> -->
        <!-- jvectormap -->
        <!-- <script src="{{asset('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script> -->
       <!--  <script src="{{asset('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script> -->
        <!-- fullCalendar -->
        <!-- <script src="{{asset('assets/js/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script> -->
        <!-- jQuery Knob Chart -->
        <!-- <script src="{{asset('assets/js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script> -->
        <!-- daterangepicker -->
        <script src="{{asset('assets/js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <!-- <script src="{{asset('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script> -->
        <!-- iCheck -->
       <!--  <script src="{{asset('assets/js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script> -->

        <!-- AdminLTE App -->
        <script src="{{asset('assets/js/AdminLTE/app.js')}}" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
       <!--  <script src="{{asset('assets/js/AdminLTE/dashboard.js')}}" type="text/javascript"></script> --> 

         <!-- DATA TABES SCRIPT -->
        <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>

        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> 
        {!! Toastr::message() !!}  

         <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>  

        <script type="text/javascript">
            $(document).ready(function()
            {

                // $.ajax({                 
                //     type: "get",          
                //     url: "https://www.universal-tutorial.com/api/getaccesstoken",
                //     success : function(response)
                //     {   
                //         //console.log(response.auth_token);                        
                //         getcountry(response.auth_token);  
                //     },

                //   headers: {
                //             "Accept": "application/json",
                //             "api-token": "XkP1lAjhE4zuFm3NBB94g4qnESfref78-QEyPlyms29PhVtOryi2UI2dGtHUN8ngbSg",
                //             "user-email": "rahulpatil942121@gmail.com"
                //           }
                //     });


                // function getcountry(auth_token)
                // {
                //     $.ajax({                 
                //     type: "get",          
                //     url: "https://www.universal-tutorial.com/api/countries/",
                //     success : function(response)
                //     {   
                //         //console.log(response);                        
                //         getstate(auth_token);  
                //     },

                //   headers: 
                //   {
                //         "Authorization": "Bearer "+ auth_token,
                //         "Accept": "application/json"
                //       }
                //     });
                // }

                // function getstate(auth_token)
                // {
                //     let country_name = "India";
                //     let exit_state = $('#state_id').attr('datalist');
                //     //alert(exit_state);
                //     $.ajax({                 
                //         type: "get",          
                //         url: "https://www.universal-tutorial.com/api/states/"+country_name,
                //         success : function(response)
                //         {   
                //           // console.log(response[0].state_name);
                //           var len = response.length;
                //           $('#ddlstate').html('<option value="">Select State</option>');
                //           if(len > 0)
                //          {
                //           for(var i = 0;i < len;i++)
                //           {

                //               if(exit_state != null)
                //               {
                //                     if(exit_state == response[i].state_name)
                //                   {
                //                     $('#ddlstate').append('<option value="'+ response[i].state_name +'"selected>'+ response[i].state_name +'</option>');
                //                   }
                //                   else
                //                   {
                //                     $('#ddlstate').append('<option value="'+ response[i].state_name +'">'+ response[i].state_name +'</option>');
                //                   }
                //               }
                //               else
                //               {
                //                 $('#ddlstate').append('<option value="'+ response[i].state_name +'">'+ response[i].state_name +'</option>');
                //               }
                             
                //           }  
                //          } 
                //           $('.ddlstate').change();
                              
                //         },

                //       headers: 
                //       {
                //             "Authorization": "Bearer "+ auth_token,
                //             "Accept": "application/json"
                //         }
                //     });

                // }


                    $('.btn_delete').click(function()
                    {
                      if(confirm('Are you sure ....!!') == true)
                      {
                        //  you want to Change Status?
                        return true;
                      }
                      else
                      {
                          return false;
                      }
                    });
                    
                    $("#files").change(function() 
                    {
                        $('#btnimg_submit').click();
                    });
                 
                });

     // -------------------------------

        // $('.ddlstate').change(function()
        // {
        //     //alert($(this).val());

        //      $.ajax({                 
        //             type: "get",          
        //             url: "https://www.universal-tutorial.com/api/getaccesstoken",
        //             success : function(response)
        //             {   
        //                 //console.log(response.auth_token);                        
        //                 getcity(response.auth_token);  
        //             },

        //           headers: {
        //                     "Accept": "application/json",
        //                     "api-token": "XkP1lAjhE4zuFm3NBB94g4qnESfref78-QEyPlyms29PhVtOryi2UI2dGtHUN8ngbSg",
        //                     "user-email": "rahulpatil942121@gmail.com"
        //                   }
        //             });

        //         function getcity(auth_token)
        //         {
        //             let state_name = $('.ddlstate').val();
        //             let exit_city = $('#city_id').attr('datalist');
        //             //alert(exit_city);
        //             $.ajax({                 
        //                 type: "get",          
        //                 url: "https://www.universal-tutorial.com/api/cities/"+state_name,
        //                 success : function(response)
        //                 {   
        //                     //console.log(response);
        //                   var len = response.length;
        //                   $('#ddlcity').html('<option value="">Select City</option>');
        //                   if(len > 0)
        //                  {
        //                   for(var i = 0;i < len;i++)
        //                   {

        //                       if(exit_city != null)
        //                       {
        //                             if(exit_city == response[i].city_name)
        //                           {
        //                             $('#ddlcity').append('<option value="'+ response[i].city_name +'"selected>'+ response[i].city_name +'</option>');
        //                           }
        //                           else
        //                           {
        //                             $('#ddlcity').append('<option value="'+ response[i].city_name +'">'+ response[i].city_name +'</option>');
        //                           }
        //                       }
        //                       else
        //                       {
        //                         $('#ddlcity').append('<option value="'+ response[i].city_name +'">'+ response[i].city_name +'</option>');
        //                       }
                             
        //                   }  
        //                  } 
                              
        //                 },

        //               headers: 
        //               {
        //                     "Authorization": "Bearer "+ auth_token,
        //                     "Accept": "application/json"
        //                 }
        //             });

        //         }
        // });
        </script>  

    </body>
</html>