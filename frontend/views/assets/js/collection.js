/**
 * 发起收藏
 * @param {string} model
 * @param {int} model_id
 * @param callback
 */
function collection(model, model_id, callback) {
    callback = callback || jQuery.noop;
    jQuery.post("/collection/collection/store", {model: model, model_id: model_id}, function (result) {
        return callback(result.status);
    });
}