<!DOCTYPE html>
<html>
<head>
    <title>CKEditor Sample</title>
    <script src="/dds-yii/js/ckeditor/ckeditor.js"></script>
</head>
<body>
    <form method="post">
        <p>
            My Editor:<br>
            <textarea name="editor1">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>