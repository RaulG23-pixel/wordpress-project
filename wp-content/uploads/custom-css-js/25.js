<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 
const page = "http://localhost/wordpress/custom/";
if(window.location.href === page){
let section = document.querySelector(".products");


section.addEventListener('click', function(e){
	let elemento = e.target;
	if(elemento.classList.contains('btn-add')){
		let parent = elemento.parentElement.parentElement.parentElement;
		let imageSrc = parent.children[0].children[0].currentSrc;
		let productText = parent.children[1].children;
		let [titulo,descripcion,precio] = productText;
		let textValues = [titulo.textContent,descripcion.textContent,precio.textContent];
		let i = 0;
		let template = '';
		
		createTemplate(imageSrc,textValues);
		let productList = document.querySelector(".product_list");
		if(!productList.classList.contains('open')){
			productList.classList.add('open');
		}
		incrementPrice(precio);
	}
});

function createTemplate(img, text){
	let [titulo, descripcion, precio] = text;
	let template = `
		<div class='item'>
			<div class='item__img_container'>
				<img src=${img} alt='imagen de producto'/>
			</div>
			<div class='item__text_content'>
				<p class='text_content__title'>${titulo}</p>
				<span class='text_content__descripcion'>${descripcion}</span>			
				<div class='text_content__flex'>
					<span class='text_content__precio'>${precio}</span>
					<div>
						${createSelect()}
						<button class='btn_borrar'>Borrar</button>
					</div>
				</div>
			</div>
		</div>
	`;
	addToProductList(template);
}
function addToProductList(str){
	let productList = document.querySelector(".product_list__content");
	productList.innerHTML += str;
}

let closeButton = document.querySelector("#close_button");
let productList = document.querySelector('.product_list');
closeButton.addEventListener('click',() => {
	if(productList.classList.contains('open')){
		productList.classList.remove('open');
	}
});
let openButton = document.querySelector('#open_button');
openButton.addEventListener('click', () => {
	if(!productList.classList.contains('open')){
		productList.classList.add('open');
	}
});

function createSelect(){
	let template = '<select class="custom_select">';
	let i = 0;
	while(i < 10){
		template += `
			<option value='${i + 1}'>${i + 1}</option>`;
		i++;
	}
	template += '</select>';
	return template;
}
function incrementPrice(value){
	let total = document.querySelector("#total");
	let myTotalNumber = parseFloat(total.textContent);
	let valueNumber = parseFloat(value.textContent);
	let result = valueNumber + myTotalNumber;
	total.innerHTML = " " + result.toFixed(2) + "$";
}
function decrementPrice(value){
	let total = document.querySelector("#total");
	let myTotalNumber = parseFloat(total.textContent);
	let valueNumber = parseFloat(value.textContent);
	let result = myTotalNumber - valueNumber;
	total.innerHTML = " " + result.toFixed(2) + "$";
}

let productContent = document.querySelector(".product_list__content");
	//Borrar productos
	productContent.addEventListener('click', (e) =>{
		let element = e.target;
		if(element.classList.contains('btn_borrar')){
			let parent = element.parentElement.parentElement.parentElement;
			let price = parent.children[2].children[0];
			decrementPrice(price);
			deleteItem(element);
		}
	});
	//Actualizar precio en funcion a la cantidad seleccionada
	productContent.addEventListener('change',(e) => {
		let i = 0;
		let children = productContent.children;
		let total = document.querySelector("#total");
		let result = 0;
		while(i < children.length){
			let row = children[i].children[1].children[2];
			let [column1, column2] = row.children;
			let price = parseFloat(column1.textContent);
			let cant = parseInt(column2.children[0].value);
			result += price * cant;
			i++;
		}
		total.innerHTML = " " + result.toFixed(2) + "$";
	})

//Borra un producto de la lista
function deleteItem(element){
		let parent = element.parentElement.parentElement;
		let item = parent.parentElement.parentElement;
		productContent.removeChild(item);
}

//Procesar datos de cotizacion
let btn_procesar = document.querySelector(".btn_procesar");
btn_procesar.addEventListener('click',() => {
	let productos = productContent.children;
	const data = formatearDatos(productos);
		let host = 'http://localhost/wordpress/wp-json'; 
		fetch(host + '/jwt-auth/v1/token', {
			method: 'POST',
			headers: {
				"Content-Type": "application/json",
			},
			body: JSON.stringify({
				username: 'test',
				password: 'kalstein..'
			})
		})
		.then(res => res.json())
		.then(res=> {
			  let response = res;
			  let token = res.token;
			  let headers = {
				  "Content-Type": "application/json",
				  'Authorization': 'Bearer ' + token,
			  	}
			  	fetch(host + '/prueba/v1/add-tmp', {
					headers,
					method: 'POST',
					body: JSON.stringify(data)
				}).then(res => res.json())
					.then(res => {
						if(res.status === "OK"){
							//window.location.href = `http://localhost/wordpress/formulario?order_code=${res.order_code}`;
							console.log(res);
						}
					})
			  }
		).catch(e => console.log(e))
});

//Formatea los datos de los productos y crea un objeto por cada producto
function formatearDatos(arr){
	let data = [...arr];
	let result = [];
	data.forEach(element => {
		const row = element.children;
		const [col1,col2] = row;
		const imgSrc = col1.children[0].currentSrc;
		const [titleCol,descriptionCol,col3] = col2.children;
		const model = titleCol.textContent;
		const descripcion = descriptionCol.textContent;
		const valor_unitario = col3.children[0].textContent;
		const cantidad = col3.children[1].children[0].value;
		let titleSplit = model.split(" ");
		const newData = {
			model,
			descripcion,
			valor_unitario,
			cantidad,
		}
		result.push(newData);
	})
	return result;
}
}



</script>
<!-- end Simple Custom CSS and JS -->
