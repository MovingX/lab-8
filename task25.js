const fs = require('fs');
const path = require('path');

function listFilesInDirectory(directoryPath) {
    try {
        const files = fs.readdirSync(directoryPath);
        console.log(`Список файлов в директории ${directoryPath}:`);
        files.forEach(file => {
            console.log(file);
        });
    } catch (error) {
        console.error(`Ошибка при чтении директории: ${error.message}`);
    }
}
const directoryPath = path.join(__dirname, 'jsonfile');
listFilesInDirectory(directoryPath);

const emailModule = require('./task26');
emailModule.sendEmail('moroshkin.m2003@mail.ru', 'Тема: Скрипт 25', 'Текст: Был выполнен скрипт из задачи 25');
