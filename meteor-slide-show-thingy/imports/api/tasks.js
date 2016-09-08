import { Mongo } from 'meteor/mongo';

export const Tasks = new Mongo.Collection('tasks');


//{ "_id" : "fhu52i7Fway9xo2B6", "text" : "", "createdAt" : ISODate("2016-09-03T05:56:31.682Z") }



//db.tasks.find()

//read
//db.tasks.find({ _id:"ygP4PpSwbcDnXpwSf"})


//update
//db.tasks.update({ _id:"ygP4PpSwbcDnXpwSf"},{$set:{text: "1"}})


//delete
//db.tasks.remove({ _id:"ygP4PpSwbcDnXpwSf"})
