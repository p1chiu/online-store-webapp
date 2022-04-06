<?php 
header("Content-type: text/css");
?>
body {
    font-family: "open-sans", sans-serif;
    background-color: rgb(65, 103, 206,0.3);
    margin-top: 100px;
}
.logo{
    width: 100%;
    height: 100%;
    max-width: 100%;
}
ul{
    max-height: 7vh;
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: rgb(65, 103, 206);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    border: 1px solid white;
}
 
#dropdownMenuButton{
    max-height: 7vh;
    list-style-type: none;
    background-color: rgb(65, 103, 206);
    position: absolute;
    top: 10px;
    height: 100%;
    display: flex;
    padding: 5% 0px 0px 5%;
    font-size: 1rem;
    outline: none;
    border: none;
    position: static;
    top: 0;
    padding: 0;
    text-align: center;
    line-height: 7vh;
    display: flex;
    margin-left:auto;
    margin-right:auto;
}

.dropdown {
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
    height: 100%;
    
}

.dropdown:hover .dropdown-menu {
    display: block;
 }

li  {
    float: left;
    border-right: 1px solid #bbb;
    width: 100%;
}
  
li a {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    height: 100%;
    text-decoration: none;
}
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: rgb(13, 56, 148);
  }

  li:last-child {
    border-right: none;
  }

  .arrival-heading strong{
    font-size: 1.2rem;
    letter-spacing: 1px;
    color: #1b1919;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 40px;
    padding: 5px 30px;
    border: 1px solid #e0e0e0;
}
.arrival-heading{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.arrival-heading strong{
    color: #ffffff;
    background-color: #3461c2;
    font-weight: 500;
}
.arrival-heading p{
    color: #808080;
    margin: 10px;
    font-size: 0.9rem;
}
.product-container{
    width:90%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
}
.product-box{
    display: flex;
    flex-grow: 0.5;
    flex-direction: column;
    align-items: center;
    border: 1px solid black;
    border-radius: 10px;
    margin: 20px;
    background: white;
    cursor: pointer;
}
.product-img{
    width:200px;
    height: 210px;
    margin: 20px;
    cursor: pointer;
    position: relative;
}
.product-img img{
    width:100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}
.product-details{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 10px 20px;
  
}
.p-name{
    color: #727272;
}
.p-price{
    color: #333333;
    font-size: 1.2rem;
    font-weight: 400;
}
.product-box:hover{
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
}
.add-cart{
    position: absolute;
    right: -20px;
    top: 10px;
    width:50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    background-color: #0b9d8a;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    display: none;
    animation: fade 0.3s;
 
}
.add-cart:hover{
    background-color: #f76b6a;
    transition: all ease 0.2s;
}
.product-box:hover .add-cart{
    display: flex;
}
.new-arrival{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: rgb(65, 103, 206);
    margin: 75px auto 0px auto;
    padding: 5px 30px;
    width: 800px;
    box-shadow: 0 0 5px black;
  }

.student {
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
padding: 20px;
}

.slot {
margin: 25px;
width: 250px;
display: flex;
flex-direction: column;
align-items: center;
}

.slot img {
border-radius: 100px;
width: 150px;
height: 150px;
margin-bottom: 10px;
}

.disabled {
    pointer-events:none; 
    opacity:0.6;
    text-decoration: line-through;  
}

.enabled {
    pointer-events: auto;
    opacity: 1;
}