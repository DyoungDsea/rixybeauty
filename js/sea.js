
$(document).ready(function(){
    
    //delete category
    $(document).on("click","#catRemove", function(){
        var cid = $(this).attr("cid");
        magicFunction(cid, 'category-process', 'You want to delete?', 'catDelete', 'Deleted');
    })

     //delete blog
     $(document).on("click","#blogRemove", function(){
        var cid = $(this).attr("cid");
        magicFunction(cid, 'blog-process', 'Delete for me?', 'catDelete', 'Deleted');
    })

    $(document).on("click","#subCatRemove", function(){
        var cid = $(this).attr("cid");
        magicFunction(cid, 'sub-category-process', 'Delete for me?', 'catDelete', 'Deleted');
    })

    $(document).on("change", "#category", function(){
        var option = $(this).find('option:selected');
        var value= option.val();
        if(value !=""){
            fireDataForMe("category-search", "Sub", value, "#subcat");
        }        
    });


    // productRemove
    $(document).on("click","#productRemove", function(){
        var cid = $(this).attr("cid");
        var img = $(this).attr("img");
        magicFunction(cid, 'ajax-process', 'Delete for me?', 'proDelete', 'Deleted', img);
    })


})











function fireDataForMe(dataLink, dataPost, dataValue, dataId){
    $.ajax({
        url:dataLink,
        method:"POST",
        data:{search:dataPost,id:dataValue},
        success:function(data){
            $(dataId).html(data);           
        }    
    });
}


function magicFunction(dataId, dataPost, sweetTitle, dataTitle, doneTitle, dataValueA=''){
    Swal.fire({
        position: 'center',
        type: 'warning',
        title: sweetTitle,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'        
        }).then((result) => {
        if (result.value){
            sendAjaxMessage(dataPost, dataTitle, dataId, doneTitle,'success', dataValueA)
        }
    });
    
   
}


function sendAjaxMessage(dataPost, dataTitle, dataId, doneTitle, sweetType, dataValueA='', dataValueB='', dataValueC='' ){
    $.ajax({
        url:dataPost,
        method:"POST",                    
        data:{Message:dataTitle, id:dataId, valueA:dataValueA, valueB:dataValueB, valueC:dataValueC},        
        success:function(){
            setInterval(function(){
                window.location.reload();
            },2000);             
        }
    }) .done(function(){
        Swal.fire({
            type:sweetType, 
            title:doneTitle
        });
    }) .fail(function(){
        Swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
    });
}