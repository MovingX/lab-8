const axios = require('axios');

async function predictInfo(name) {
    try {
        //Agify API для предсказания возраста
        const agifyResponse = await axios.get(`https://api.agify.io?name=${encodeURIComponent(name)}`);
        const agifyResult = agifyResponse.data;

        //Genderize API для предсказания пола
        const genderizeResponse = await axios.get(`https://api.genderize.io?name=${encodeURIComponent(name)}`);
        const genderizeResult = genderizeResponse.data;

        return {
            name,
            age: agifyResult.age,
            gender: genderizeResult.gender
        };
    } catch (error) {
        console.error(error);
        throw new Error('Внутренняя ошибка сервера.');
    }
}

module.exports = {
    predictInfo,
};
