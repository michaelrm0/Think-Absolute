    $.post(baseUrl+"Administrador/ListarFacultades",
    {
//            CodDep: $('#cbodepartamento').val(),
//            Estado: 'A'
    },
    function(data)
    {
        var facultad = JSON.parse(data);
        $.each(facultad,function(i,item)
        {                   
        $('#cbofac').append('<option value="'+item.CodFacu+'"  >'+item.NombFacu+'</option>');

        });
    });  
    
    $('#cbofac').change(function()
    {    
        $('#cboesc').html('<option value="" disabled="" selected="">Seleccione la escuela</option>');
        $('#cbofac option:selected').each(function ()
        {
            $.post(baseUrl+"Administrador/ListarEscuelas",
            {
                facultad: $('#cbofac').val()
            },
            function(data)
            {
                var escuela = JSON.parse(data);
                $.each(escuela,function(i,item)
                {               
                   $('#cboesc').append('<option value="'+item.CodEsc+'">'+item.NombEsc+'</option>');
                });
            });
        });

    });
