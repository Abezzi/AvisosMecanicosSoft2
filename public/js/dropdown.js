

	    $(document).ready(function(){

        $(document).on('change','.productcategory',function(){
            // console.log("hmm its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";
            
            $.ajax({
                type:'get',
                url: '/findProductName', 
                data:{'id':cat_id},
                success:function(data){
                    op+='<option value="0" selected disabled>Seleccionar...</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].resume_debilidad+'</option>';
                   }

                   div.find('.productname').html(" ");
                   div.find('.productname').append(op);
                },
                error:function(){

                }
            });
        });


    });
