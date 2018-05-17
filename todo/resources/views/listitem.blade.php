<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="mt-5 text-center">ToDo List</h2>
        <div class="jumbotron col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Item
            </button>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tasks</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="ouritem" data-toggle="modal" data-target="#exampleModal">1</th>
                    <td class="ouritem" data-toggle="modal" data-target="#exampleModal">Mark</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Item</h5>
                <button type="button" class="close" id="addnew" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="item" id="additem" placeholder="Write your item" class="form-control">
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" id="addbutton" aria-invalid="title">Add Item</button>
                <button type="button" style="display: none;" class="btn btn-danger" id="delete" data-dismiss="modal">Delete</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="savechanges">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.min.js"--}}
        {{--integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="--}}
        {{--crossorigin="anonymous"></script>--}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.ouritem').each(function(){
            $(this).click(function(event){
                var txt=$(this).text();
                $('#title').text('Edit Item');
                $('#additem').val(txt);
                $('#delete').show(400);
                $('#savechanges').show(400);
                $('#addbutton').hide(400);
            });
        });

        $('.additem').click(function(event){

                $('#title').text('Add item');
                $('#additem').val("");
                $('#delete').hide('400');
                $('#savechanges').hide('400');
                $('#addbutton').show('400');
            });
        });

</script>
</body>
</html>