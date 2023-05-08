
function imgName(imgname) {
    $('#output').html('<img src=\"images/'+ imgname +'.png\" width=\"1000px\" height=\"500px\">');
}

$("#OS").click(() => {
    imgName("OS");
});

$("#CS").click(() => {
    imgName("CS");
});

$("#AI").click(() => {
    imgName("AI");
});

$("#WT").click(() => {
    imgName("WT");
});

$("#CC").click(() => {
    imgName("CC");
});

$("#CD").click(() => {
    imgName("CD");
});

$("#DAA").click(() => {
    imgName("DAA");
});

