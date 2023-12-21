const readline = require('readline');
const apiModule = require('./ApiModule');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function promptForName() {
    rl.question('Введите имя: ', async (name) => {
        try {
            const result = await apiModule.predictInfo(name);
            console.log('Результат предсказания:', result);
            rl.close();
        } catch (error) {
            console.error(error.message);
            rl.close();
        }
    });
}

promptForName();

const emailModule = require('./task26');
emailModule.sendEmail('moroshkin.m2003@mail.ru', 'Тема: Скрипт 27', 'Текст: Был выполнен скрипт из задачи 27');
