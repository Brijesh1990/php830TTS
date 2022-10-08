<div class="container mt-5">
    <h3 class="text-center">Book Your table</h3>
    <hr class="border w-25 border-dark mx-auto">
    
    
    <form method="post">
       <div class="row">
        <div class="col-md-3 mx-auto mt-3">    
        <div class="form-group">
        <label>Select option</label>
        <select name="book-option" class="form-control">
            <option value="">-select option-</option>
            <option value=""></option>
        </select>
        </div> 
        </div>

        <div class="col-md-3 mx-auto mt-3">    
            <div class="form-group">
            <label>Select Date & time</label>
            <select name="book-option" class="form-control">
                <option value="">-select day & time-</option>
                <option value=""></option>
            </select>
            </div> 
            </div>
       </div>

       <div class="form-group text-center mx-auto mt-3">
        <button type="button" onclick="book()" class="btn btn-success btn-sm">Book Your table now >></button>
       </div>
    </form>
 
</div>

<script>
    function book()
    {
        alert('login first for booked your table')
        window.location='login';
    }
</script>