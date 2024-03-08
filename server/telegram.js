const TelegramBot = require('node-telegram-bot-api');
const mysql = require('mysql');
const nodeCron = require("node-cron");
const request = require('requestify');

const bot = new TelegramBot(":", {
    polling: {
        interval: 300,
        autoStart: true,
        params: {
            timeout: 10
        }
    }
})
const client = mysql.createPool({
    connectionLimit: 50,
    host: "localhost",
    user: "root",
    database: "",
    password: ""
});

bot.on('message', async msg => {

    let chat_id = msg.chat.id,
        text = msg.text ? msg.text : '',
        settings = await db('SELECT * FROM settings ORDER BY id DESC');

    if(!text) return bot.sendMessage(chat_id, 'Message should not contain images / emojis / stickers');

    if(text.toLowerCase() === '/start') {
        return bot.sendMessage(chat_id, `Hello!\nTo receive a bonus, you need to:\n\n1. 👉 Subscribe to the <a href="https://t.me/demosoyou">channel</a>\n2. 👉 Enter the command received on the website`, {
            parse_mode: "HTML"
        });
    }

    else if(text.toLowerCase().startsWith('/bind')) {
        // code omitted for brevity
    }

    return bot.sendMessage(chat_id, 'Command not recognized', {
        reply_to_message_id: msg.message_id
    });
});

nodeCron.schedule('0 13 * * *', async () => {
    setTimeout(async () => {
        request.post('https://beta.so-you-start.ru/createPromoTG').then(function(response) {
            const res = response.getBody();
            return bot.sendMessage("@demosoyou", `
💰 Promo code 10₽/250act — ${res.promoSum}

⚡ Promo code for 15%/20act — ${res.promoDep}

🚀 Current domain — beta.so-you-start.ru

📢 The site is operating normally, withdrawals are averaging up to 2 hours.`, {
                parse_mode: 'Markdown',
                reply_markup: JSON.stringify({
                    inline_keyboard: [
                        [
                            { "text": "Activate promo code", "url": "https://beta.so-you-start.ru/" }
                        ]
                    ]
                })
            })
        })

        console.log(`[APP] Promotional codes issued`);
    }, 10 * 1000);
});

nodeCron.schedule('0 18 * * *', async () => {
    setTimeout(async () => {
        request.post('https://beta.so-you-start.ru/createPromoTG').then(function(response) {
            const res = response.getBody();
            return bot.sendMessage("@xlmv_57", `
💰 Promo code 10₽/250act — ${res.promoSum}

⚡ Promo code for 15%/20act — ${res.promoDep}

🚀 Current domain — beta.so-you-start.ru

📢 The site is operating normally, withdrawals are averaging up to 2 hours.`, {
                parse_mode: 'Markdown',
                reply_markup: JSON.stringify({
                    inline_keyboard: [
                        [
                            { "text": "Activate promo code", "url": "https://beta.so-you-start.ru/" }
                        ]
                    ]
                })
            })
        })

        console.log(`[APP] Promotional codes issued`);
    }, 10 * 1000);
});

nodeCron.schedule('0 21 * * *', async () => {
    setTimeout(async () => {
        request.post('https://beta.so-you-start.ru/createPromoTG').then(function(response) {
            const res = response.getBody();
            return bot.sendMessage("@demosoyou", `
💰 Promo code 10₽/250act — ${res.promoSum}

⚡ Promo code for 15%/20act — ${res.promoDep}

🚀 Current domain — beta.so-you-start.ru

📢 The site is operating normally, withdrawals are averaging up to 2 hours.`, {
                parse_mode: 'Markdown',
                reply_markup: JSON.stringify({
                    inline_keyboard: [
                        [
                            { "text": "Activate promo code", "url": "https://beta.so-you-start.ru/" }
                        ]
                    ]
                })
            })
        })

        console.log(`[APP] Promotional codes issued`);
    }, 10 * 1000);
});

function makeIdentify(length) {
    var result = "";
    var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

async function sendCodes(type, name, amount, limit, wager, need_deposit) {
    request.post('https://beta.so-you-start.ru/createPromoTG').then(function(response) {
        return bot.sendMessage("@demosoyou", `
        💰 Promo code 10₽/250act —

        ⚡ Promo code for 15%/20act —

        🚀 Current domain — beta.so-you-start.ru

        📢 The site is operating normally, withdrawals are averaging up to 2 hours.`, {
            parse_mode: 'Markdown',
            reply_markup: JSON.stringify({
                inline_keyboard: [
                    [
                        { "text": "Activate promo code", "url": "https://beta.so-you-start.ru/" }
                    ]
                ]
            })
        })
    })
    return await ctx.telegram.sendMessage(config.telegram_channel_id, `
💰 Promo code 10₽/250act —

⚡ Promo code for 15%/20act —

🚀 Current domain — beta.so-you-start.ru

📢 The site is operating normally, withdrawals are averaging up to 2 hours.`, {
    parse_mode: 'Markdown',
    reply_markup: JSON.stringify({
        inline_keyboard: [
            [
                { "text": "Activate promo code", "url": "https://beta.so-you-start.ru/" }
            ]
        ]
    })
});
}

function db(databaseQuery) {
    return new Promise(data => {
        client.query(databaseQuery, function (error, result) {
            if (error) {
                console.log(error);
                throw error;
            }
            try {
                data(result);

            } catch (error) {
                data({});
                throw error;
            }

        });

    });
    client.end()
}
