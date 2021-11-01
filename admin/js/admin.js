const clearance_table = $(".clearance-table");
const certification_table = $(".certification-table");
const permit_table = $(".permit-table");
const travelpermit_table = $(".travelpermit-table");
const addvoter = $(".addvoterbtn");
const voter_table = $(".account-table");
let btnbrgy = "";
let admin_table_id = "";
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

const checkvoterID = (value) => {
    document.cookie = "votersid=" + value;
    $("#formvoter").submit();
}

addvoter.click(() => {

    swal("", {
        content: {
            element: "input",
            attributes: {
                placeholder: "ENTER VOTERS ID",
                type: "text",
            }
        },
        buttons: ["CANCEL", "SAVE"],
    })
        .then((value) => {
            value == null ? null :
                value ? checkvoterID(value) : swal("", "VOTERS ID IS EMPTY", "warning");
        })
});

const updatevotersID = (value, dbtable_id) => {
    document.cookie = "votersid=" + value;
    document.cookie = "votersid_table=" + dbtable_id;
    $("#update-formvoter").submit();
}

voter_table.click((e) => {
    let id = e.target.id;
    let split = id.split("-");
    let button = split[0];
    let dbtable_id = split[1];
    let voters_id = $(".voterid-" + dbtable_id).text();
    if (button == "update") {
        swal("UPDATE VOTERS ID: " + voters_id, {
            content: {
                element: "input",
                attributes: {
                    placeholder: "ENTER VOTERS ID",
                    type: "text",
                }
            },
            buttons: ["CANCEL", "UPDATE"],
        })
            .then((value) => {
                value == null ? null :
                    value ? updatevotersID(value, dbtable_id) : swal("", "VOTERS ID IS EMPTY", "warning");
            })
    }

});

//superadmin--------------------------------------------------------------------------
const addbrgy_account = (barangay, username, password) => {
    document.cookie = "brgy_barangay=" + barangay;
    document.cookie = "brgy_username=" + username;
    document.cookie = "brgy_password=" + password;
    barangay && username && password ? $("#brgy-addform").submit() : swal("", "INCOMPLETE DATA", "warning");
}
const updatebrgy_account = (id, barangay, username, password) => {
    document.cookie = "brgy_id=" + id;
    document.cookie = "brgy_barangay=" + barangay;
    document.cookie = "brgy_username=" + username;
    document.cookie = "brgy_password=" + password;
    username && password ? $("#brgy-updateform").submit() : swal("", "INCOMPLETE DATA", "warning");
}
$(".addbrgybtn").click(() => {
    $(".infobrgy").css("display", "flex");
    btnbrgy = "add";
});

$(".title-button-brgy").click(() => {
    $(".infobrgy").css("display", "none");
    $(".barangay-select").val("");
    $(".barangay-select").prop('disabled', false);
});

$(".savebtn-brgy").click(() => {
    let barangay = $(".barangay-select").val();
    let username = $(".username-brgy").val();
    let password = $(".password-brgy").val();
    btnbrgy == "add" ? addbrgy_account(barangay, username, password) : updatebrgy_account(admin_table_id, barangay, username, password);
});

$(".superadmin-table").click((e) => {
    let id = e.target.id;
    let split = id.split("-");
    let button = split[0];
    let td_id = split[1];
    let username = $(".username-" + td_id).text();
    let barangay = $(".barangay-" + td_id).text();
    barangay = barangay.toLowerCase();
    if (button == "update") {
        $(".infobrgy").css("display", "flex");
        $(".barangay-select").val(barangay);
        $(".barangay-select").prop('disabled', true);
        $(".username-brgy").val(username);
        btnbrgy = "update";
        admin_table_id = td_id;
    }
});