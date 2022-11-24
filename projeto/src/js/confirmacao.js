function confirmarApagar(id){
    var confirmar =confirm("Tem certeza que deseja escluir o reegistro de id " 
+ id + " selecionado?");

if(confirmar) {
    //console.log("Confirmou apagar!")
    location.href = "src/controler/cliente_bd/excluiCliente.php?id=" + id;
} else{
    console.log("CACELADO!")
}
}