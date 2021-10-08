
var base_url = window.location.origin;

function Deletemessage(id){
    
   var result = confirm("Want to delete?");
if (result) {
    $.ajax({
            url: base_url+'/admin/ajax/delete-message.php',
            data: {Msg_id:id},
            dataType: 'json',
            type: 'POST',
            beforeSend: function() { //before call to server loader show
     $("#corres-message").html('<div class="spinner-border text-primary loading-custom" role="status"><span class="sr-only">Loading...</span></div>')

                //$this.addClass("loading");
            },
            
            success: function (res) { //call back funtion call when success
                //alert(res.message);
                $('.loading-custom').remove();
                 $(".custom-message").remove();
                
                $(".custom-error").remove();
                if(res.success == true){
                    var message=`<div class="alert alert-success custom-message" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Success! </strong> Deleted successfully!.
              </div>`;
                  $("#corres-message").html(message);
                  $("#corres_item_"+id).remove();

                 }else{
                    var message=`<div class="alert alert-danger custom-error" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Error! </strong> Something went wrong.
              </div>`;
                    $("#corres-message").html(message);
                }
               // $this.attr('class',"service-wishlist "+res.class);
            },
            error:function (e) { //call when errro occured in the server
                $('.loading-custom').remove();
                $(".custom-message").remove();
                $(".custom-error").remove();
                var message=`<div class="alert alert-danger custom-error" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Error! </strong> Something went wrong.
              </div>`;
                 $("#corres-message").html(message);
            }
        }); ///ajax end
    }
}
 

$(document).ready(function (e) {
    $('#message_form').on('submit',(function(e) {
   

       $this=this;
       id='message_form';
       table_msg_id='corres-message';
   
      e.preventDefault(); 
      var formdata = new FormData(this); 
     $.ajax({
                url: base_url+'/admin/ajax/add-message.php',
                data: formdata,
                type:'POST',
                cache:false,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
    //     $('<div class="spinner-border text-primary loading-custom" role="status"><span class="sr-only">Loading...</span></div>').insertBefore(this);
                    //$this.addClass("loading");
                },
                success: function (res) {
                    //alert(res.message);
                    $('.loading-custom').remove();
                     $(".custom-message").remove();
                    
                    $(".custom-error").remove();
                   
                    
   
                  
   
                    if(res.success == true){
                      
                        var message=`<div class="alert alert-success custom-message m-3" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>Success! </strong> Added successfully!.
                  </div>`;
                      $(message).insertBefore($this); //show message
                      
                      $("#"+id).trigger("reset");
                      //table nUll and add new data
                    $("#"+id+"_table").html('');
   
                    $.each(res.data, function(i, item) { //loop to add data
                  
                         var tr ='<tr id="corres_item_'+item.Msg_id+'"><td>'+item.score_type+'</td>'
                         +'<td>'+item.score_explained+'</td>'
                          
                            +'<td><button type="button" onclick="Deletemessage('+item.Msg_id+', \''+table_msg_id+'\');"'
                            +' class="btn btn-danger"><i class="fas fa-trash"></i></button></td>'
                            +'</tr>';
                        $("#"+id+"_table").append(tr); //append data
                       
                        });
    
                     }else{
                        var message=`<div class="alert alert-danger custom-error" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>Error! </strong> Something went wrong.
                  </div>`;
                        $(message).insertBefore($this); //error message show
                    }
                   // $this.attr('class',"service-wishlist "+res.class);
                },
                error:function (e) {
                    $('.loading-custom').remove();
                    $(".custom-message").remove();
                    
                    $(".custom-error").remove();
                    var message=`<div class="alert alert-danger custom-error" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>Error! </strong> Something went wrong.
                  </div>`;
                     $(message).insertBefore($this); //error message show
                    
                }
               });
            return false;
          
           }));
       });
