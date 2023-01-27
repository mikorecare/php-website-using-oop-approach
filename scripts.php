

<script type="text/javascript">

    function cancelAdd(){
        window.location.href="product_list.php";
    }

    function goToAddProduct(){
        window.location.href="add_product.php";
    }

    function showForm(){
    hideForm();
    var selected = document.getElementById('productType').value.toLowerCase();
    document.getElementById(selected).style.display = 'inline';         
    }
    function hideForm(){
    const hide = ["dvd","book","furniture"];
    for(i = 0; i < hide.length; i++){
        document.getElementById(hide[i]).style.display = 'none';
        console.log(hide[i]);
    }   
    }
</script>
