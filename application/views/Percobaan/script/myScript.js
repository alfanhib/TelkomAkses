$(document).ready(function(){
    $('#loginLayout').trigger("click");
    var i = 0;
    $(".addNewItem").click(function(){
        i++;
        $("#tabelHarga tbody:last").append("<tr>" + 
                                                "<td style='text-align: center; vertical-align: middle;'> " + 
                                                    i + 
                                                "</td>" +
                                                "<td style='text-align: center; vertical-align: middle;'>" + 
                                                    "<textarea class='form-control' rows='5' id='addDesignator'></textarea>" +
                                                "</td>" +
                                                "<td style='text-align: center; vertical-align: middle;'>" +
                                                    "<textarea class='form-control' rows='5' id='addPekerjaan'></textarea>" +
                                                "</td>" +
                                                "<td style='text-align: center; vertical-align: middle;'>" +
                                                    "<input type='text' class='form-control' id='addSatuan' placeholder='Satuan'>" +
                                                "</td>" +
                                                "<td style='text-align: center; vertical-align: middle;'>" +
                                                    "<input type='text' class='form-control' id='addMaterial' placeholder='Material'>" +
                                                "</td>" +
                                                "<td style='text-align: center; vertical-align: middle;'>" +
                                                    "<input type='text' class='form-control' id='addJasa'  placeholder='Jasa'>" +
                                                "</td>" +
                                                "<td style='text-align: center; vertical-align: middle;'>" + 
                                                    "<div class='btn-group'>" +
                                                        "<button class='btn btn-danger' class='btnDelCol'><i class='fa fa-trash'></i></button>" +
                                                    "</div>" +
                                                "</td>" +
                                           "</tr>");
    });
    
    $("button .btnDelCol").click(function(){
        var indexToRemove = $(this).index();
        $("#tabelHarga tbody tr").each(function() {
        $(this).find("td:eq("+indexToRemove+")").remove();
    });
    });
});