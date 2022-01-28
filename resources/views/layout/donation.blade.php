<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/donation.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container"> <div class=" text-center mt-5 ">
        <h1>Food Donation Form</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" action="{{route('donation')}}" method="POST">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Food Type</label> <select id="form_need" name="foodtype" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your Food--</option>
                                                <option>Rice</option>
                                                <option>Chicken</option>
                                                <option>Beef</option>
                                                <option>Water</option>
                                            </select> </div>
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Food Quantity</label> <input id="form_email" type="text" name="quantity" class="form-control" placeholder="amount of food (ex. 10 kg)" required="required" data-error="Valid data is required."> </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Description</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Donate"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
</body>
</html>