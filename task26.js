const nodemailer = require('nodemailer');
const transporter = nodemailer.createTransport({
    host: 'smtp.rambler.ru',
    port: 465,
    auth: {
        user: '********************@rambler.ru',
        pass: '************',
    }
});

function sendEmail(toEmail, subject, text) {
    const mailOptions = {
        from: '*************@rambler.ru',
        to: toEmail,
        subject: subject,
        text: text,
    };

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.error('Ошибка отправки письма:', error);
        } else {
            console.log('Письмо успешно отправлено:', info.response);
        }
    });
}

module.exports = {
    sendEmail,
};
