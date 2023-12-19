//Select navigation labels and modify them for single posts
let prevText = document.querySelector('.single [rel="prev"] .post-navigation-link__label');
let nextText = document.querySelector('.single [rel="next"] .post-navigation-link__label');
if( null !== prevText ){
    prevText.innerHTML = 'PREVIOUS'
}
if( null !== nextText ){
    nextText.innerHTML = 'NEXT'
}