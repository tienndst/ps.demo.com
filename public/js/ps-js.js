function like_enable(x) {
    x.classList.toggle("fa-thumbs-up");
}
function show_block(x) {
    x = document.getElementById('cmt_box');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}