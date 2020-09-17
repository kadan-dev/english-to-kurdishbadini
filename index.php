<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DecKurd by kadan-dev</title>
        <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/international-circular-flags/512/kurdish_kurdistan_flag_country_national_region_european-512.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript" src="assets\js\apicodes.min.js"></script>
        <link href="./css/style.css" rel="stylesheet" type="text/css" />
        <script src="./code/consor.js"></script>
        <script src="./code/clipboard.js"></script>
    </head>
    <body>
        <div class="container">
            <br />
            <br />
            <h1 style="text-align: center; color: red;">English to kurdish Translation</h1>
            <span style=""></span>
            <form id="action-form" action="action.php" method="POST" accept-charset="utf-8">
                <div class="form-group">
                    <button type="button" class="btn btn-warning">English</button>
                    <textarea
                        name="link"
                        rows="5"
                        class="form-control"
                        id="#"
                        placeholder="Enter your statement"
                        onclick="this.select()"
                        style="font-size: 17pt; color: #ffffff; border: 1px solid #f1151529; width: 98%; padding: 4px; min-height: 170px; background-color: #004c6e;"
                        id="ktd"
                    ></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="action-submit" class="btn btn-success"><span id="fa-loading"></span>Translate</button>
                    <button type="reset" class="btn btn-danger" value="Clear" onclick="cc();">Clear</button>
                </div>
            </form>

            <hr />
            <hr />
            <hr />

            <div class="form-group">
                <button type="button" class="btn btn-warning">Kurdish</button>
                <textarea
                    rows="5"
                    class="form-control"
                    id="iframe-encode"
                    style="font-size: 17pt; color: #ffffff; border: 1px solid #f1151529; width: 98%; padding: 4px; min-height: 170px; background-color: #004c6e;"
                    id="ktd"
                    dir="rtl"
                    placeholder=""
                    onclick="this.select()"
                ></textarea>
            </div>

            <script type="text/javascript">
                jQuery(function ($) {
                    $("#action-form").submit(function (e) {
                        e.preventDefault();
                        $("#action-submit").prop("disabled", !0);
                        $("#fa-loading").html('<i class="fa fa-spinner fa-spin"></i>');
                        var b = $(this).serializeArray(),
                            c = $(this).attr("action");
                        $.ajax({
                            type: "POST",
                            dataType: "text",
                            url: c,
                            data: b,
                            error: function (result) {
                                alert("Something went wrong. Please try again!");
                                $("#fa-loading").html('<i class="fa fa-arrow-circle-right"></i>');
                                $("#action-submit").removeAttr("disabled");
                            },
                            success: function (result) {
                                $("#iframe-encode").html(" " + result + " ");
                                $("#fa-loading").html('<i class="fa fa-arrow-circle-right"></i>');
                                $("#action-submit").removeAttr("disabled");
                            },
                        });
                    });
                });
            </script>

            <hr />
            <form name="transcription">
                <table class="tab-kbc">
                    <tr>
                        <td>
						<div class="btn btn-success">
                            Type or paste a text<br />
                            in Arabic alphabet: <br />
							</div>
                            <textarea
                                id="bar1"
                                dir="rtl"
                                name="text1"
                                rows="10"
                                onKeyUp="aralat()"
                                class="cadrarab"
                                style="font-size: 17pt; color: #ffffff; border: 1px solid #f1151529; width: 98%; padding: 4px; min-height: 170px; background-color: #004c6e;"
                                id="ktd"
                            ></textarea>
                            <br />
                            <br />
                            <input type="button" onClick="reset();transcription.text1.focus()" value="Clear" class="btn btn-danger" />
                        </td>
                        <td>
                      						<div class="btn btn-success">
                            Type or paste a text<br />
                            in latin alphabet: <br />
							</div>
                            <textarea
                                id="bar2"
                                name="text2"
                                rows="10"
                                onKeyUp="latara()"
                                class="cadrlat"
                                style="font-size: 17pt; color: #ffffff; border: 1px solid #f1151529; width: 98%; padding: 4px; min-height: 170px; background-color: #004c6e;"
                                id="ktd"
                            ></textarea>
                            <br />
                            <br />
                            <input type="button" onClick="reset();transcription.text2.focus()" value="Clear" class="btn btn-danger"/>
                        </td>
                    </tr>
                </table>
                <script>
                    var clipboard = new Clipboard(".bf");
                    clipboard.on("success", function (e) {
                        console.log(e);
                    });
                    clipboard.on("error", function (e) {
                        console.log(e);
                    });
                </script>
            </form>
        </div>
   <footer>

 <center > <a class="btn btn-danger" href="https://www.instagram.com/kadan_muhammad/">by:kadan muhammad</a></p></center>
</footer>
    </body>
</html>
