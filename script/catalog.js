class Product {
    constructor(name, price, pic = null, id, sale) {
        this.label = name;
        this.pic = pic;
        this.price = price;
        this.id = id;
        this.sale = sale;
    }
    renderProduct(el) {
        let newProductBlock = document.createElement('a');
        newProductBlock.classList.add('product');
        newProductBlock.href = `/handlers/getCatalogItems.php?product = ${this.id}`;
        newProductBlock.innerHTML = `
            <div class="product__img" style="background-image: url(${this.pic});"></div>
            <div class="product__name"> ${this.label} </div>
            <div class="product__price"> ${this.price - this.price * this.sale} руб.</div>
        `;
        if( this.sale > 0){
            newProductBlock.classList.add('sale');

        }

        el.appendChild(newProductBlock);
    }
}
class Catalog{
    constructor(catalogBlock) {
        this.el = document.querySelector(catalogBlock);
        this.section = this.el.getAttribute('data-section');
        this.name = this.el.getAttribute('data-name');
        this.products = [];

    }
    productsArray(products){
        this.products = products;

    }
    renderCatalog(){
        this.products.forEach((value) => {
            value.renderProduct(this.el);
        });
    }
    // preLoadOn(){
    //     this.el.classList.add('preload');
        
    // }
    // preLoadOff(){
    //     this.el.classList.remove('preload');
    // }
    renderPagination(configPagination){
        let paginationEl = document.querySelector('.pagination');

        paginationEl.innerHTML = '';

        for(let i = 1; i <= configPagination.countPage; i++){
            console.log(i);
            let div = document.createElement('div');
            div.classList.add('pagination__num');
            
            if(configPagination.nowPage == i) {
                div.classList.add('pagination__num_active');
            }
            
            div.innerHTML = i;
            div.setAttribute('data-page', i);

            paginationEl.appendChild(div);
            
            let that = this;
            div.addEventListener('click', function(){
                // this - это div и существует потеря див по этому пишем that
                that.load( this.getAttribute('data-page') );

            });
        }
    }
    load(page = 1){
        let xhr = new XMLHttpRequest();
        xhr.open('GET',`/api/getProducts.php?catalogBlock = ${this.catalogBlock}&page=${page}&section=${this.section}&name=${this.name}`);
        xhr.send();

        xhr.addEventListener('load' , ()=> {
            // this.preLoadOn();
            let data = JSON.parse(xhr.responseText);
            console.log(data);
            
            this.renderPagination(data.pagination);

            this.products = [];
            this.el.innerHTML = '';
        
            let dataArray = [];
            data.cards.forEach((product)=> {
                dataArray.push( new Product ( product.name, product.price, product.img_src, product.id, product.sale ))
                    
            });
            catalog.productsArray(dataArray);
            catalog.renderCatalog();
            // this.preLoadOff();
        });
    }
}
let catalog = new Catalog('.content');
catalog.load();





    


