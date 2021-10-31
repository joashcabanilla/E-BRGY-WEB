const clearance_table = $(".clearance-table");
const certification_table = $(".certification-table");
const permit_table = $(".permit-table");
const travelpermit_table = $(".travelpermit-table");

clearance_table.click((e) => {
    let id = e.target.id;
    let split = id.split("-");
    let button = split[0];
    let td_id = split[1];
    if (button == "print") {
        let td_classname = "printStatus" + td_id;
        $('.' + td_classname).text("PRINTED");
    }
    else {
        //update
    }
});

certification_table.click((e) => {
    let id = e.target.id;
    let split = id.split("-");
    let button = split[0];
    let td_id = split[1];
    if (button == "print") {
        let td_classname = "printStatus" + td_id;
        $('.' + td_classname).text("PRINTED");
    }
    else {
        //update
    }
});

permit_table.click((e) => {
    let id = e.target.id;
    let split = id.split("-");
    let button = split[0];
    let td_id = split[1];
    if (button == "print") {
        let td_classname = "printStatus" + td_id;
        $('.' + td_classname).text("PRINTED");
    }
    else {
        //update
    }
});

travelpermit_table.click((e) => {
    let id = e.target.id;
    let split = id.split("-");
    let button = split[0];
    let td_id = split[1];
    if (button == "print") {
        let td_classname = "printStatus" + td_id;
        $('.' + td_classname).text("PRINTED");
    }
    else {
        //update
    }
});
