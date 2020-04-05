export default class validator{
 constructor () {
     this.messages = {};
 }
getMassege(field){
if(this.messages[field]){
    return this.messages[field][0];
}
}

setMessage(message){
    this.messages = message;
}


}