const imageModule = require('./imageModule');

const inputImagePath = 'Mops.jpg'; 
const outputImagePath = 'new_Mops.jpg'; 
const targetWidth = 1200;
const targetHeight = 1200;

imageModule.resizeImage(inputImagePath, outputImagePath, targetWidth, targetHeight);

const emailModule = require('./task26');
emailModule.sendEmail('moroshkin.m2003@mail.ru', 'Тема: Скрипт 28', 'Текст: Был выполнен скрипт из задачи 28');