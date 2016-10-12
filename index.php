<?php
// https://github.com/xing/wysihtml5
// http://shjs.sourceforge.net/doc/documentation.html
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        #content {
            width: 700px;
            margin: auto;
            padding-top: 100px;
        }
        textarea {
            width: 600px;
            height: 300px;
        }
    </style>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/shjs/sh_main.js"></script>
    <script type="text/javascript" src="js/shjs/langs/sh_java.js"></script>

    <link type="text/css" rel="stylesheet" href="js/shjs/sh_style.css">
</head>
<body onload="sh_highlightDocument();">
    <div id="content">
        <fieldset>
            <legend>Исходный код</legend>
            <form method="post" action="/сompile.php">
                <textarea name="source"></textarea>
                <br>
                <input type="submit" value="Run" />
            </form>
        </fieldset>
    </div>
    <div style="border: 1px solid">
        <pre class="sh_java">
            public class JavaApplication1 {

                /**
                 * @param args the command line arguments
                 */
                public static void main(String[] args) {
                    // TODO code application logic here
                    System.out.println("Hello world")
                }

            }
        </pre>
    </div>
</body>
</html>