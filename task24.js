const fs = require('fs');
const path = require('path');


function parseJSONfiles(directoryPath) {
    try {
        const files = fs.readdirSync(directoryPath);
        files.forEach(file => {
            const filePath = path.join(directoryPath, file);
            if (fs.statSync(filePath).isFile() && path.extname(filePath) === '.json') {
                console.log(`Содержимое файла ${file}:`);
                parseJSONfile(filePath);
                console.log('\n');
            }
        });
    } catch (error) {
        console.error(`Ошибка при чтении директории: ${error.message}`);
    }
}

function parseJSONfile(filePath) {
    try {
        const jsonData = fs.readFileSync(filePath, 'utf-8');
        const parsedData = JSON.parse(jsonData);
        console.log(JSON.stringify(parsedData, null, 2));
    } catch (error) {
        console.error(`Ошибка при парсинге JSON файла ${filePath}: ${error.message}`);
    }
}

const directoryPath = path.join(__dirname, 'jsonfile');
parseJSONfiles(directoryPath);

const emailModule = require('./task26');
emailModule.sendEmail('moroshkin.m2003@mail.ru', 'Тема: Скрипт 24', 'Текст: Был выполнен скрипт из задачи 24');
