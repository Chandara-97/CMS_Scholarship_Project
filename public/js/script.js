$(document).ready(function(){
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

    $("#SelectAll").click(function(event){
        if(this.checked){
            $(".Selectbox").each(function(){
                this.checked=true;
            })
        }
        else{
            $(".Selectbox").each(function(){
                this.checked=false;
            });
        }
    });
});
