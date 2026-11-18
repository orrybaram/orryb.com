angular.module('mongolab', ['ngResource']).
	factory('Project', function($resource){
		var Project = $resource('https://api.mongolab.com/api/1/databases' +
			'/projects_db/collections/projects/:id',
			{ apiKey: '4ff7413de4b0011c3c7f400b' }, 
			{ update: {method: 'PUT'}}
		);

		Project.prototype.update = function(cb) {
			return Project.update({ id: this._id$oid}, 
				angular.extend({},this,{_id:undefined}), cb);
		};

		Project.prototype.destroy = function(cb) {
			return Project.remove({id: this._id.$oid}, cb);
		};
		
		return Project;
	});