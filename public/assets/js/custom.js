function sweet(){
swal(
  'The Internet?',
  'That thing is still around?',
  'question'
)


}

function sweett(){
	swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#000',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    swal(
      'Deleted!',
      'Deleted.',
      'success'
    )
  }
})

}