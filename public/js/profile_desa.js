var viewModel = {}

let desaTemplate = {
    Judul: "",
    Gambar: "",
    Deskripsi: ""
}

var profileDesa = {}
viewModel.desa = ko.mapping.fromJS(desaTemplate)
viewModel.desas = ko.observableArray([])
viewModel.mode = ko.observable("show");
viewModel.uploadImage = function() {
    var fd = new FormData()
    var files = $('#desaGambar')[0].files;
    
    if(files.length > 0) {
        fd.append('file', files[0])

        $.ajax({
            url: '/api/desa/upload',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                viewModel.desa.Gambar(res)
            }
        })
    }
}

profileDesa.add = function() {
    viewModel.mode("add")
    ko.mapping.fromJS(desaTemplate, viewModel.desa)
    $("#add-desa-modal").modal('show')
}

profileDesa.simpanDesa = function(data) {
    console.log(ko.mapping.toJS(data.desa))
    $.ajax({
        url: '/api/desa/simpan',
        type: 'post',
        dataType: 'json',
        data: JSON.stringify(ko.mapping.toJS(data.desa)),
        contentType: 'application/json',
        success: function(res) {
            profileDesa.reset()
            swal("Success", res.Message, "success")
                .then((value) => {
                    location.reload()
                })
        }
    })
}

profileDesa.edit = function(data) {
    return function() {
        $.ajax({
            url: '/api/desa/edit/' + data,
            type: 'get',
            contentType: 'application/json',
            success: function(res) {
                viewModel.mode("edit")
                ko.mapping.fromJS(res, viewModel.desa)
                $("#add-desa-modal").modal('show')
            }
        })
    }
}

profileDesa.update = function() {
    let payload = ko.mapping.toJS(viewModel.desa)

    $.ajax({
        url: '/api/desa/update/' + payload.id,
        type: 'put',
        dataType: 'json',
        data: JSON.stringify(payload),
        contentType: 'application/json',
        success: function(res) {
            profileDesa.reset()
            swal("Created", res.Message, "success")
                .then((value) => {
                    location.reload()
                })
        }
    })
}

profileDesa.delete = function(id) {
    return function() {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '/api/desa/delete/' + id,
                        type: 'delete',
                        contentType: 'application/json',
                        success: function(res) {
                            swal("Deleted", res.Message, "success")
                                .then((value) => {
                                    location.reload()
                                })
                        }
                    })
                }
            });
    }
}

profileDesa.reset = function() {
    $("#add-desa-modal").modal('hide')
    ko.mapping.fromJS(desaTemplate, viewModel.desa)
}

ko.applyBindings(viewModel)