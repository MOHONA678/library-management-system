// Delete Data
function del(e, t) {
  e.preventDefault();
  let c = confirm("Are you sure?");
  if (!c) return;
  t.closest('form').submit();
}