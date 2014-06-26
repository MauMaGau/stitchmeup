<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<style>
	</style>
</head>
<body style="background-color:#ccc">
    <section style="background-color:#000; box-shadow:0px 5px 5px #555">
        <div class="container">
            <img src="{{ URL::to('fb-head.jpg') }}" alt="">
        </div>
    </section>

    <div class="container" style="background-color:#fff">
        <div class="content" style="margin-top:40px">
            <section class="col-sm-7">
                <img src="{{ URL::to('fb-grab.png') }}">
            </section>
            <section class="col-sm-5">
                <form action="" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <legend>Request a Quote</legend>
                        </div>

                        <div class="form-group">
                            <label for="inputType" class="col-sm-3 control-label">Type:</label>
                            <div class="col-sm-9">
                                <select name="type" id="inputType" class="form-control">
                                    <option value="">Velcro Patch</option>
                                    <option value="">Non-Velcro Patch</option>
                                    <option value="">T-shirt</option>
                                    <option value="">Hoody</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="inputSize" class="col-sm-3 control-label">Size:</label>
                            <div class="col-sm-9">
                                <input type="text" name="size" id="inputSize" class="form-control">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                                <span class="help-block">Eg. 60mm x 70mm</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="inputAmount" class="col-sm-3 control-label">Amount:</label>
                            <div class="col-sm-9">
                                <input type="number" name="Amount" id="inputAmount" class="form-control" min="1" step="1" required="required">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                                <span class="help-block">How many patches do you want?</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="inputFile" class="col-sm-3 control-label">File:</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" id="inputFile" class="form-control">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                                <span class="help-block">Please attach your design in jpg, png, or bmp format.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputMessage" class="col-sm-3 control-label">Message:</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="message" id="inputMessage" class="form-control"></textarea>
                                <span class="help-block">Any other information?</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                </form>
            </section>
        </div>
    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-10955279-11', 'auto');
      ga('send', 'pageview');

    </script>

</body>
</html>
