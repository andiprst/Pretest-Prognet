<html>
<head>
    <title>test</title>
    <script type="text/javascript" src="jquery-3.4.0.min.js">
    </script>
</head>
<body>
<form action="simpan.php" method="POST">
    <input type="text" name="nama" placeholder="Nama Anda" />
    <input type="text" name="pekerjaan" placeholder="Pekerjaan Anda" />
    <input type="submit" name="submit" value="submit" />
</form>
<hr/>
    <div id="content">

    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            loadData();

            $('form').on('submit',function(a){
                a.preventDefault();
                $.ajax({
                    type:$(this).attr('method'),
                    url:$(this).attr('action'),
                    data:$(this).serialize(),
                    success:function(){
                        loadData();
                        resetForm();
                    }
                });
            })

        })

        function loadData(){
            $.get('data.php',function(data){
                $('#content').html(data);
                $('.hapusData').click(function(a){
                    a.preventDefault();
                        $.ajax({
                        type:'get',
                        url:$(this).attr('href'),
                        success:function(){
                            loadData();
                        }
                    });
                });
                $('.updateData').click(function(a){
                    a.preventDefault();
                    $('[name=nama]').val($(this).attr('nama'));
                    $('[name=pekerjaan]').val($(this).attr('pekerjaan'));
                    $('form').attr('action',$(this).attr('href'));
                });
            })
        }

        function resetForm(){
            $('[type=text]').val('');
            $('[name=nama]').focus();
            $('form').attr('action','simpan.php')
        }
    </script>
</body>
</html>