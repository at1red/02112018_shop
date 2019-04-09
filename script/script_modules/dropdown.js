var panelItem = document.querySelectorAll('.features__title');
var active = document.getElementsByClassName('active');
  
Array.from(panelItem).forEach(function(item,) {
  item.addEventListener('click', function(e) {
    if (active.length > 0 && active[0] !== this) // если есть активный элемент, и это не тот по которому кликнули
      active[0].classList.remove('active'); // убрать класс active

    // изменить состояние класса active на текущем элементе: добавить если не было, убрать если было.
    this.classList.toggle('active');
     
  });
});