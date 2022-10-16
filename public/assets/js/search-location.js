
    function searchLocation(){
        $.ajax({
            url : '/visitor',
            type : 'Get',
            dataType : 'json',
            data : {
            'search' : $('#search-input').val()
            },
            success : function(result){  
                $('#loading').css('display','none')
                let url = `/check-in/verify/${result.data.id}`
                let status;
                let button;
                if(result.data != null){
                    if(result.data.status == 1){
                        status = `<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Terkonfirmasi</span>`
                        button = `<button class="btn btn-primary btn-sm disabled" type="submit">Check In</button>`
                    }else{
                        status = `<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>`                        
                        button = `<button class="btn btn-primary btn-sm" type="submit">Check In</button>`
                    }
                    $('#update').attr('action',url);
                    $('#binding').append(`
                        <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">${result.data.name}</h5>
                                <div class="row">
                                <div class="col-5">
                                    <span>Nomer Regis : </span>
                                </div>
                                <div class="col">
                                    <span>${result.data.no_ticket}</span>
                                </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-5">
                                    <span>Status : </span>
                                </div>
                                <div class="col">
                                    ${status}
                                </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-5">
                                    <span>Jenis Kelamin : </span>
                                </div>
                                <div class="col">
                                    <span>${result.data.gender}</span>
                                </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-5">
                                    <span>Kelas tiket : </span>
                                </div>
                                <div class="col">
                                    <span>${result.data.class}</span>
                                </div>
                                
                                </div>
                                <div class="row mt-3">
                                <div class="d-flex">
                                    ${button}
                                </div>
                                    
                                </div>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    `);
                }
                else{
                     $('.message').html(`
                    <small class="text-danger">Maaf Nomer Registrasi Tersebut tidak ditemukan</small>
                `)
                }
            }
        });
    }

    $('#btn-search').on('click',function(){
        $('#place-list').html('')
        $('#loading').css('display','block')
        searchLocation()
    });

    $("#search-input").on('keyup', function (e) {
        $('#place-list').html('')
        if (e.key === 'Enter' || e.keyCode === 13) {
            $('#loading').css('display','block')
            searchLocation()
        }
    });