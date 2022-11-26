// 参考https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger#js-events
window.addEventListener('dfMessengerLoaded', function (event) {
    console.log('Chatbot is loading.');
    const dfMessenger = document.querySelector('df-messenger');
    const payload = [
        {
            "richContent": [
                [
                    {
                        "type": "chips",
                        "options": [
                            {
                                "text": "开始自评",
                                "link": "https://example.com"
                            },
                            {
                                "text": "开始从诶评",
                                "link": "https://example.com"
                            }
                        ]
                    }
                ]
            ]
        }];
    dfMessenger.renderCustomCard(payload);
    dfMessenger.renderCustomText('Customed text');
    dfMessenger.addEventListener('df-button-clicked', function (event) {
        // Handle event
        console.log('test log3');
    });
});
window.addEventListener('df-button-clicked', function (event) {

});