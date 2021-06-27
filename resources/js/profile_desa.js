let viewModel = {}
ko.applyBindings(viewModel)

let desaTemplate = {
    Judul: "",
    Gambar: "",
    Deskripsi: ""
}

viewModel.desa = ko.mapping.fromJS(desaTemplate)