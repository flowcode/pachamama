<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Example Mail View</title>
    </head>
    <body>
        <h1>Example Title</h1>
        <h3>Example Subtitle</h3>
        <table style="border: 1px solid #DFDFDF;background-color: #F9F9F9;width: 100%;-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;font-family: Arial,Helvetica,Verdana,sans-serif;color: #333;width: 600px;">
            <tbody>
                <tr>
                    <td style="border-top-color: white;border-bottom: 1px solid #DFDFDF;color: #555;font-size: 12px;padding: 4px 7px 2px;vertical-align: top;">Name</td>
                    <td style="border-top-color: white;border-bottom: 1px solid #DFDFDF;color: #555;font-size: 12px;padding: 4px 7px 2px;vertical-align: top;"><? echo $params["name"] ?></td>
                </tr>
                <tr>
                    <td style="border-top-color: white;border-bottom: 1px solid #DFDFDF;color: #555;font-size: 12px;padding: 4px 7px 2px;vertical-align: top;">Mail</td>
                    <td style="border-top-color: white;border-bottom: 1px solid #DFDFDF;color: #555;font-size: 12px;padding: 4px 7px 2px;vertical-align: top;"><? echo $params["mail"] ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>